
		<div class="row">
			<div class="col-12 mt-3 text-right">
				<a href="?view=sign" class="btn btn-outline-danger">Sign up</a>
			</div>
			<div class="col-4 offset-4 my-5">
				<div class="row">
					<marquee behavior="" direction="right">
						<h1>Create Account</h1>
					</marquee>
				</div>
				<form action="views/moduls/send.php" method="post">
					<label for="ism"> Fullname:</label>
					<input type="text" id="fullname" placeholder="Fullname..." name="fulname" class="form-control">

					<label for="inp" class="mt-3"> Email :</label>
					<input type="email" placeholder="Email..." name="email" class="form-control">

					<label for="inp" class="mt-3"> Username :</label>
					<input type="text" id="user" placeholder="Create username" name="username" class="form-control">
                    <p class="text-danger" id="usern"></p>

					<label for="paro" class="mt-2"> Password:</label>
					<input type="password" id="password" placeholder="Create password" name="parol" class="form-control">

					<label for="par" class="mt-3"> Password :</label>
					<input type="password" id="password2" placeholder="Password" name="password" class="form-control">

					<button type="submit" name="btn" class="btn btn-danger btn-block mt-4">Create Account</button>
				</form>
			</div>
		</div>

