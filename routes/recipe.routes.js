import { Router } from "express";
import { allRecipes, getRecipe } from "../controllers/recipe.controller.js";

const recipeRouter = Router();

recipeRouter.get("/", allRecipes);

recipeRouter.get("/:id", getRecipe);

export default recipeRouter;
