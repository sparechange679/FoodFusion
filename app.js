import express from "express";
import { PORT } from "./config/env.js";
import userRouter from "./routes/user.routes.js";
import authRouter from "./routes/auth.routes.js";
import recipeRouter from "./routes/recipe.routes.js";
import contactsRouter from "./routes/contact.routes.js";
import connectToDatabase from "./database/mysql.js";
import errorMiddleware from "./middlewares/error.middle.js";
import cookieParser from "cookie-parser";
import pageRouter from "./routes/page.routes.js";

const app = express();

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

// Routers
app.use("/foodfusion/users", userRouter);
app.use("/foodfusion/contacts", contactsRouter);
app.use("/foodfusion/recipes", recipeRouter);
app.use("/foodfusion/auth", authRouter);

// Error middleware
app.use(errorMiddleware);

// Default route to load an HTML file
app.use(pageRouter);

app.listen(PORT, async () => {
  await connectToDatabase();
  console.log(
    `FoodFusion API is running on http://localhost:${PORT}`
  );
});
