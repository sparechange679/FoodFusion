import { Router } from "express";
import path from "path";
import { sendMessage } from "../controllers/contact.controller.js";

const contactsRouter = Router();

contactsRouter.get("/", (req, res) => {
  res.sendFile(path.resolve("public/index.php"));
});

contactsRouter.post("/", sendMessage);

export default contactsRouter;