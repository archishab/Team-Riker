<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script>
        function allowDrop(ev) {
          ev.preventDefault();
        }
        
        function drag(ev) {
          ev.dataTransfer.setData("text", ev.target.id);
        }
        
        function drop(ev) {
          ev.preventDefault();
          var data = ev.dataTransfer.getData("text");
          ev.target.appendChild(document.getElementById(data));
        }
        </script>
</head>
<body class ="grid-container">

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div class="header">
        <h2 class="logo"  <?php session_start(); ?>>RSA</h2><h4 >Logged in as <?php echo($row["email"]); ?></h4>
        <div>
            <ul>
                <li><a href="index.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="create-event.php">Create Event</a></li>
                <li><a class="active" href="kanban.php">Kanban</a></li>
                <li><a href="calendar.php">Calendar</a></li>
            </ul>
        </div>
</div>
<br><br>
<div class="main">
        <div class="kanban-heading">
            <strong class="kanban-heading-text">Kanban Board</strong>
        </div>
        <div class="kanban-board">
            <div class="kanban-block" id="todo" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>To Do</strong>
                <div class="task" id="task1" draggable="true" ondragstart="drag(event)">
                    <span>Task 1</span>
                </div>
                <div class="task" id="task2" draggable="true" ondragstart="drag(event)">
                    <span>Task 2</span>
                </div>
                <div class="task" id="task3" draggable="true" ondragstart="drag(event)">
                    <span>Task 3</span>
                </div>
            </div>
            <div class="kanban-block" id="inprogress" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>In Progress</strong>
            </div>
            <div class="kanban-block" id="done" ondrop="drop(event)" ondragover="allowDrop(event)">
                <strong>Done</strong>
            </div>
        </div>
</div>

<div class="left">

</div>
<div class="right">

</div>

<div class="footer">

    <p class="foot">
        <i class="fas fa-carrot"></i>
            RIKER SCHEDULING &copy 2021
    </p>

</div>

</body>
</html>