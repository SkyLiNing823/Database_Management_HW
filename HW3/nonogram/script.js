const row = document.getElementById("row")
const col = document.getElementById("col")
const difficult = document.getElementById("difficult")
const life = document.getElementById("life")
const confirmBtn = document.getElementById("confirmBtn")
const Board = document.getElementById('Board')


function colCount(rowNum, colNum, ansArray) {
    for (let i = 0; i < colNum; i++) {
        let numArray = new Array();
        let colArray = new Array();
        count = 0;
        t = 0;
        for (let j = 0; j < rowNum; j++)
            colArray.push(ansArray[j][i])
        for (let j = 0; j < colArray.length; j++) {
            if (colArray[j] == 1) {
                count += 1;
            } else {
                if (count == 0)
                    continue;
                else {
                    numArray.push(count);
                    count = 0;
                    t++;
                }
            }
        }
        if (count != 0) {
            numArray.push(count);
            t++;
        }
        if (t == 0) {
            numArray.push(0);
        }
        for (let k = 0; k < numArray.length; k++) {
            document.getElementById(`Col${i+1}`).innerText += String(numArray[k]) + ".";
        }
    }
}

function rowCount(rowNum, colNum, ansArray) {
    for (let i = 0; i < rowNum; i++) {
        let numArray = new Array();
        count = 0;
        t = 0;
        for (let j = 0; j < colNum; j++) {
            if (ansArray[i][j] == 1) {
                count += 1;
            } else {
                if (count == 0)
                    continue;
                else {
                    numArray.push(count);
                    count = 0;
                    t++;
                }
            }
        }
        if (count != 0) {
            numArray.push(count);
            t++;
        }
        if (t == 0) {
            numArray.push(0);
        }
        for (let k = 0; k < numArray.length; k++) {
            document.getElementById(`Row${i+1}`).innerText += String(numArray[k]) + ".";
        }
    }

}

function check(rowNum, colNum, ansArray) {
    let s = 0;
    for (let i = 0; i < rowNum; i++) {
        for (let j = 0; j < colNum; j++) {
            if (ansArray[i][j] == 1) {
                s = 1;
                break;
            }
        }
    }
    if (s == 0) {
        alert("恭喜你找出所有黑塊!!!");
    }
}


confirmBtn.addEventListener("click", function() {
    rowNum = parseInt(row.value);
    colNum = parseInt(col.value);
    difficultNum = parseInt(difficult.value);
    lifeNum = parseInt(life.value);

    if (lifeNum < 1)
        lifeNum = 1;
    if (difficultNum < 1)
        difficultNum = 1;
    else if (difficultNum > 3)
        difficultNum = 3;

    document.getElementById("nowLife").innerText = lifeNum;
    let nowlife = document.getElementById("nowLife").innerText

    Board.innerHTML = ''
    for (let i = 0; i < rowNum + 1; i++) {
        for (let j = 0; j < colNum + 1; j++) {
            if (i == 0 && j == 0) {
                Board.innerHTML += `<button class="hiddenBtn"></button>`;
            } else if (i == 0) {
                Board.innerHTML += `<button class="hintBtn" id="Col${j}"></button>`;
            } else if (j == 0) {
                Board.innerHTML += `<button class="hintBtn" id="Row${i}"></button>`;
            } else {
                Board.innerHTML += `<button class="pressBtn" id="${i}x${j}"></button>`;
            }
        }
    }

    let ansArray = new Array(); //先宣告一維
    for (let i = 0; i < rowNum; i++) {
        ansArray[i] = new Array(); //宣告二維
        for (let j = 0; j < colNum; j++) {
            let randNum = Math.floor(Math.random() * 10);
            if (randNum <= 8 - difficultNum)
                ansArray[i][j] = 1;
            else
                ansArray[i][j] = 0;
        }
    }

    rowCount(rowNum, colNum, ansArray);
    colCount(rowNum, colNum, ansArray);

    let pressBtn = document.getElementsByClassName("pressBtn");
    let hintBtn = document.getElementsByClassName("hintBtn");

    for (let i = 0; i < pressBtn.length; i++) {
        pressBtn[i].addEventListener("click", function() {
            const btnRow = Math.floor(i / colNum);
            const btnCol = i % colNum;
            if (ansArray[btnRow][btnCol] == 1) {
                this.style.backgroundColor = "black";
                ansArray[btnRow][btnCol] = 0;
                check(rowNum, colNum, ansArray);
            } else {
                if (this.style.backgroundColor != "black") {
                    this.style.backgroundColor = "red";
                    this.innerHTML = "X"
                    nowlife -= 1;
                    document.getElementById("nowLife").innerText = nowlife;
                    if (nowlife == 0) {
                        alert("您的生命值已歸0!\n遊戲將重置");
                        confirmBtn.click();
                    }


                }
            }
        })
    }

    for (let i = 0; i < hintBtn.length; i++) {
        hintBtn[i].addEventListener("click", function() {
            alert(hintBtn[i].innerText);
        })
    }

    Board.style.cssText = `width: ${(colNum+1)*50}px; height: ${(rowNum+1)*50}px;`;
})