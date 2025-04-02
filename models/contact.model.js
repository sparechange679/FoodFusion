import { Sequelize, DataTypes } from "sequelize";
import { DB_HOST, DB_USER, DB_PASSWORD, DB_NAME } from "../config/env.js";

const sequelize = new Sequelize(DB_NAME, DB_USER, DB_PASSWORD, {
  host: DB_HOST,
  dialect: "mysql",
});

const Contact = sequelize.define(
  "Contact",
  {
    email: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        isEmail: true,
      },
    },
    subject: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        notEmpty: true,
      },
    },
    message: {
      type: DataTypes.TEXT,
      allowNull: false,
      validate: {
        notEmpty: true,
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
    console.log("Contact table created or updated successfully!");
  } catch (error) {
    console.error("Unable to create or update the table:", error);
  }
};

init();

export default Contact;