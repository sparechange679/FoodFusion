import { Router } from "express";
import path from "path";

const contactsRouter = Router();

contactsRouter.get("/", (req, res) => {
  res.sendFile(path.resolve("public/contact-form.html"));
});

contactsRouter.post("/", (req, res) => {
  // Handle form submission logic here
  res.send({ title: "CREATE new contact message" });
});

export default contactsRouter;