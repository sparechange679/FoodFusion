import Recipe from "../models/recipe.model.js";

export const allRecipes = async (req, res, next) => {
  try {
    const getAllRecipes = await Recipe.findAll();

    res.status(200).json({
      success: true,
      data: {
        allRecipes: getAllRecipes,
      },
    });
  } catch (error) {
    next(error);
  }
};

export const getRecipe = async (req, res, next) => {
  try {
    const { id } = req.params;

    const recipe = await Recipe.findByPk(id);

    if (!recipe) {
      return res.status(404).json({
        success: false,
        message: "Recipe not found",
      });
    }

    res.status(200).json({
      success: true,
      data: {
        recipe,
      },
    });
  } catch (error) {
    next(error);
  }
};

// In controllers/recipe.controller.js
export const getRecipesByIngredient = async (req, res, next) => {
  try {
    const { ingredientSlug } = req.params;
    // Convert slug to ingredient name format (e.g. "parmesan-cheese" → "parmesan cheese")
    const ingredientName = ingredientSlug.replace(/-/g, ' ').toLowerCase();

    const allRecipes = await Recipe.findAll();
    
    // Filter recipes containing the ingredient
    const filteredRecipes = allRecipes.filter(recipe => {
      const ingredients = recipe.ingredients
        .split(',')
        .map(i => i.trim().toLowerCase());
      return ingredients.includes(ingredientName);
    });

    res.status(200).json({
      success: true,
      data: {
        recipes: filteredRecipes
      }
    });
  } catch (error) {
    next(error);
  }
};
