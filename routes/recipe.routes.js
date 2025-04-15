import { Router } from "express";
import { allRecipes, getRecipe, getRecipesByIngredient } from "../controllers/recipe.controller.js";

const recipeRouter = Router();

recipeRouter.get("/", allRecipes);

recipeRouter.get("/:id", getRecipe);

// Example in routes/recipe.routes.js
recipeRouter.get('/ingredient/:ingredientSlug', getRecipesByIngredient);

export default recipeRouter;
