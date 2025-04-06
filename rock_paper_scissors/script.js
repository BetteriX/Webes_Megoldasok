let p_score = 0;
let AI_score = 0;

function play(p_Choice) {
    const choices = ["Rock", "Paper", "Scissors"];
    const computerChoice = choices[Math.floor(Math.random() * 3)];
    let result;
    if (p_Choice === 'Start') {
        result = "Pick a button";
    }
    else if (p_Choice === computerChoice) {
        result = "Draw";
    }
    else if (
        (p_Choice === "Rock" && computerChoice === "Scissors") ||
        (p_Choice === "Paper" && computerChoice === "Rock") ||
        (p_Choice === "Scissors" && computerChoice === "Paper")
    ) {
        result = "Player Win";
        p_score++;
    }
    else {
        result = "Player lost";
        AI_score++;
    }

    document.getElementById("points").innerHTML = `Player: ${p_score} AI: ${AI_score}`;
    document.getElementById("result").innerHTML = result;
    document.getElementById("AIChoice").innerHTML = `AI chose: ${computerChoice}`;
}