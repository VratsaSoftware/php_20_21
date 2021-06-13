
let form = document.getElementsByTagName('form')[0];
let btn = document.getElementsByTagName('button')[0];
let studentsInput = form.getElementsByTagName('input')[0];
let studentsList = document.getElementsByTagName('ul')[0];
let studentsOrderedList = document.getElementsByTagName('ol')[0];
let students = [];
let studentsOrdered = [];
let projects = [
    'Крави и бикове',
    'Шифроване и дешифроване на Цезар шифър',
    'Шифроване чрез Плейфеър шифър',
    'Разбиване на Цезар шифър',
    'Candy crush',
    'The Madman',
    'CaucusRace',
    'Змия',
];

//get random int
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
}

//prepare students list
form.addEventListener('submit', function(e){
    e.preventDefault();
    students.push(studentsInput.value);
    studentsList.innerHTML = '';
    for(let i = 0; i < students.length; i++){
        let currentStudent = document.createElement('li');
        currentStudent.innerText = students[i];
        studentsList.appendChild(currentStudent);
    }
}, false);

studentsInput.addEventListener('keydown', function(e){
    let inputStr = e.target.value;
    if(inputStr.length < 4){
        studentsInput.style.border="1px solid red";
        document.getElementById('error').style.display="block";
        console.log("Моля въведете повече от три символа за име!");
    }
    else{
        studentsInput.style.border="1px solid green";
        document.getElementById('error').style.display="none";
    }
}, false);

//Random students
let randBtn = document.getElementsByTagName('button')[1];
randBtn.addEventListener('click', function(e){
    btn.disabled = true;
    studentsInput.disabled.true;

    let length = students.length;
    for(let i = 0; i < length; i++){

        let randIndex = getRandomInt(0,students.length-1);
        studentsOrdered.push(students.splice(randIndex,1));
    }

    studentsOrderedList.innerHTML = '';
    for(let i = 0; i < studentsOrdered.length; i++){
        let currentStudent = document.createElement('li');
        currentStudent.innerText = studentsOrdered[i][0];
        studentsOrderedList.appendChild(currentStudent);
    }
    randBtn.disabled = true;
    console.log(studentsOrdered);
},false);

//GetProject
let getProjectBtn = document.getElementsByTagName('button')[2];

let projectBtnEnable = document.getElementsByTagName('button')[3];
projectBtnEnable.onclick = function enablePrjButton(){
    getProjectBtn.disabled = false
};

let resultsDiv = document.getElementById('result');
console.log(resultsDiv);
getProjectBtn.addEventListener('click',function(e){
    let h2result = document.createElement('h2');
    h2result.innerText = projects.splice(getRandomInt(0,projects.length-1),1);
    resultsDiv.appendChild(h2result);
    e.target.disabled = true;
}, false);










//console.log(form,btn);
