import Contact from "../models/contact.model.js";

export const sendMessage = async (req, res, next) => {
  try {
    const { subject, email, message } = req.body;

    const newMessage = await Contact.create({
      subject,
      email,
      message,
    });

    res.status(201).json({
      success: true,
      message: "Message sent successfully",
      data: {
        contactMessage: newMessage,
      },
    });
  } catch (error) {
    next(error);
  }
};
