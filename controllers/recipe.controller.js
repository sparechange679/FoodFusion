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
