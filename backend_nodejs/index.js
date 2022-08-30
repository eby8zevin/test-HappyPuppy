import express from "express";

const app = express();

app.get("/", (req, res) => {
  res.send(
    "Mohon maaf, kurang familiar dengan struktur JavaScript dan Back End."
  );
});

app.listen(3000, () => console.log("Server Running at http://localhost:3000"));
