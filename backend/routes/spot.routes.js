const express = require('express');
const router = express.Router();

// CRUD JS
router.get("/", (req, res) => {
    res.json({ message: "voici les données"});
});

router.post("/", (req, res) => {
    //console.log(req.body);
    res.json({ message: req.body.message });
});

router.put("/:id", (req, res) => {
    res.json({ messageId: req.params.id});
});

router.delete("/:id", (req, res) => {
    res.json({ message: "données supprimées à l'id : " + req.params.id });
});

// fonction like d'un spot 
router.patch("/like-spot/:id", (req, res) =>{
    res.json({message: "Spot liké : id :" + req.params.id});
});

// fonction dislike d'un spot 
router.patch("/dislike-spot/:id", (req, res) =>{
    res.json({message: "Spot disliké : id :" + req.params.id});
});

module.exports = router;