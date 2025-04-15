import express from "express";
import { PORT } from "./config/env.js";
import userRouter from "./routes/user.routes.js";
import authRouter from "./routes/auth.routes.js";
import recipeRouter from "./routes/recipe.routes.js";
import contactsRouter from "./routes/contact.routes.js";
import connectToDatabase from "./database/mysql.js";
import errorMiddleware from "./middlewares/error.middle.js";
import cookieParser from "cookie-parser";
import path from "path";

const app = express();

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

// Serve static files
const __dirname = path.resolve();
app.use(express.static(path.join(__dirname, "public")));

// Routers
app.use("/foodfusion/users", userRouter);
app.use("/foodfusion/contacts", contactsRouter);
app.use("/foodfusion/recipes", recipeRouter);
app.use("/foodfusion/auth", authRouter);

// Error middleware
app.use(errorMiddleware);

// Default route to load a PHP file the homepage
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "index.html"));
});

app.get("/about", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "about.html"));
});

app.get("/recipe", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "recipe.html"));
});

app.get("/cookbook", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "cookbook.html"));
});

app.get("/contact", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "contact.html"));
});

app.get("/culinary", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "culinary.html"));
});

app.get("/educational", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "educational.html"));
});


app.listen(PORT, async () => {
  console.log(
    `FoodFusion API is running on http://localhost:${PORT}`
  );
  connectToDatabase();
});

export default app;