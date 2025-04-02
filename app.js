import express from "express";
import { PORT } from "./config/env.js";
import userRouter from "./routes/user.routes.js";
import authRouter from "./routes/auth.routes.js";
import recipeRouter from "./routes/recipe.routes.js";
import contactsRouter from "./routes/contact.routes.js";
import connectToDatabase from "./database/mysql.js";
import errorMiddleware from "./middlewares/error.middle.js";
import cookieParser from "cookie-parser";

const app = express(); 

app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

app.use("/foodfusion/users", userRouter);
app.use("/foodfusion/contacts", contactsRouter);
app.use("/foodfusion/recipes", recipeRouter);
app.use("/foodfusion/auth", authRouter);

app.use(errorMiddleware);

app.get("/", (req, res) => {
  res.send("Welcome to the FoodFusion API!");
});

app.listen(PORT, async () => {
  console.log(
    `FoodFusion API is running on http://localhost:${PORT}`
  );
  connectToDatabase();
});

export default app;
