import express from "express";
import { PORT } from "./config/env.js";
import userRouter from "./routes/user.routes.js";
import authRouter from "./routes/auth.routes.js";
import recipeRouter from "./routes/recipe.routes.js";
import contactsRouter from "./routes/contact.routes.js";
import connectToDatabase from "./database/mysql.js";
import errorMiddleware from "./middlewares/error.middle.js";
import cookieParser from "cookie-parser";
import phpExpress from "php-express";
import path from "path";
import { fileURLToPath } from "url";

const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

// Set up php-express
const php = phpExpress({
  binPath: "php-cgi", // Path to the php-cgi binary
});
const __dirname = path.dirname(fileURLToPath(import.meta.url));
//  app.set('views', path.join(__dirname, 'public'));
app.set("views", path.join(__dirname, "public"));
app.engine("php", php.engine);
app.set("view engine", "php");

// Serve static files from the public directory
app.use(express.static("public"));

// Use php-express to handle PHP files
app.all(/.+\.php$/, php.router);

app.use("/foodfusion/users", userRouter);
app.use("/foodfusion/contacts", contactsRouter);
app.use("/foodfusion/recipes", recipeRouter);
app.use("/foodfusion/auth", authRouter);

app.use(errorMiddleware);

app.get("/", (req, res) => {
  res.render("index.php");
});

app.listen(PORT, async () => {
  console.log(`FoodFusion API is running on http://localhost:${PORT}`);
  connectToDatabase();
});

export default app;
