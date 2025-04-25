import { Router } from "express";
import express from "express";
import path from "path";

const pageRouter = Router();

// Serve static files
const __dirname = path.resolve();
pageRouter.use(express.static(path.join(__dirname, "public")));

pageRouter.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "index.html"));
  });
  
  pageRouter.get("/about", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "about.html"));
  });
  
  pageRouter.get("/recipe", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "recipe.html"));
  });
  
  pageRouter.get("/cookbook", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "cookbook.html"));
  });
  
  pageRouter.get("/contact", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "contact.html"));
  });
  
  pageRouter.get("/culinary", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "culinary.html"));
  });
  
  pageRouter.get("/educational", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "educational.html"));
  });

export default pageRouter;
