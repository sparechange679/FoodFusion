import { Sequelize, DataTypes } from "sequelize";
import { DB_HOST, DB_USER, DB_PASSWORD, DB_NAME } from "../config/env.js";

const sequelize = new Sequelize(DB_NAME, DB_USER, DB_PASSWORD, {
  host: DB_HOST,
  dialect: "mysql",
});

const Recipe = sequelize.define(
  "Recipe",
  {
    title: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        notEmpty: true,
      },
    },
    ingredients: {
      type: DataTypes.TEXT,
      allowNull: false,
      validate: {
        notEmpty: true,
      },
    },
    instructions: {
      type: DataTypes.TEXT,
      allowNull: false,
      validate: {
        notEmpty: true,
      },
    },
    pictureUrl: {
      type: DataTypes.STRING,
      allowNull: true,
      validate: {
        isUrl: true,
      },
    },
  },
  {
    timestamps: true,
  }
);

const init = async () => {
  try {
    await sequelize.sync({ alter: true }); // This updates the table without dropping it
    console.log("Recipe table created or updated successfully!");

    // Add sample data
    const sampleRecipes = [
      {
        title: "Spaghetti Carbonara",
        ingredients: "Spaghetti, Eggs, Parmesan cheese, Pancetta, Pepper",
        instructions:
          "1. Boil the spaghetti. 2. Cook the pancetta. 3. Mix eggs and cheese. 4. Combine all with pepper.",
        pictureUrl: "https://example.com/spaghetti.jpg",
      },
      {
        title: "Chicken Curry",
        ingredients:
          "Chicken, Onion, Garlic, Ginger, Tomatoes, Curry powder, Coconut milk",
        instructions:
          "1. Cook onions, garlic, and ginger. 2. Add chicken and curry powder. 3. Stir in tomatoes and coconut milk.",
        pictureUrl: "https://example.com/chicken-curry.jpg",
      },
      {
        title: "Caesar Salad",
        ingredients:
          "Romaine lettuce, Croutons, Parmesan cheese, Caesar dressing",
        instructions:
          "1. Chop lettuce. 2. Add croutons and cheese. 3. Toss with dressing.",
        pictureUrl: "https://example.com/caesar-salad.jpg",
      },
      {
        title: "Beef Stroganoff",
        ingredients:
          "Beef, Onion, Mushrooms, Sour cream, Beef broth, Flour, Butter",
        instructions:
          "1. Cook beef and onions. 2. Add mushrooms. 3. Stir in flour and broth. 4. Mix in sour cream.",
        pictureUrl: "https://example.com/beef-stroganoff.jpg",
      },
      {
        title: "Pancakes",
        ingredients: "Flour, Milk, Eggs, Sugar, Baking powder, Butter",
        instructions:
          "1. Mix dry ingredients. 2. Add wet ingredients. 3. Cook on griddle.",
        pictureUrl: "https://example.com/pancakes.jpg",
      },
      {
        title: "Margherita Pizza",
        ingredients:
          "Pizza dough, Tomato sauce, Mozzarella cheese, Basil, Olive oil",
        instructions:
          "1. Roll out dough. 2. Add sauce and cheese. 3. Bake and top with basil and olive oil.",
        pictureUrl: "https://example.com/margherita-pizza.jpg",
      },
    ];

    await Recipe.bulkCreate(sampleRecipes);
    console.log("Sample recipes added successfully!");
  } catch (error) {
    console.error("Unable to create or update the table:", error);
  }
};

init();

export default Recipe;
