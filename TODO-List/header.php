
<div class="header__section"> 
				<?php 
					require('connect.php');
					$username = $_POST['username'];
					if (isset($_SESSION['username'])) {
					$username = $_SESSION['username'];
					echo "<div class='session-text'>Вы вошли, как-" .$username. "  ! </div>";
					echo "<a class='header__item headerButton' href='logout.php'>Выйти </a> <br>";
					
				}
				?>
				<div class="header__item headerButton"><a href="login.php">Авторизация</a></div>
				<div class="header__item headerButton"><a href="registration.php">Регистрация</a></div>
				
			</div>

<div id="app">
    <div class="header">
        <div class="container">
            <div class="logo">Todo List</div>
            <div class="form">
                <input type="text" v-bind:value="valueInput" v-on:input="handlyInput" v-on:keypress.enter="addTask">
                <button class="btn" v-on:click="addTask">Add a new task </button>
            </div>
        </div>
    </div>