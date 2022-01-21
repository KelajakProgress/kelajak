
		<div class="row">
			<div class="col-12 mt-3 text-right">
				<a href="?view=sign" class="btn btn-outline-danger">Sign up</a>
			</div>
			<div class="col-4 offset-4 my-5">
				<div class="row">
					<marquee behavior="" direction="right">
						<h1>Ro'yhatdan o'tish</h1>
					</marquee>
				</div>
				<form action="views/moduls/send.php" method="post">
					<label for="ism"> Ism Familiyangiz :</label>
					<input type="text" id="fullname" placeholder="Toliq Ismingizni kiriting" name="fulname" class="form-control">

					<label for="inp" class="mt-3"> Email :</label>
					<input type="email" placeholder="Emailingizni kiriting" name="email" class="form-control">

					<label for="inp" class="mt-3"> Username :</label>
					<input type="text" id="user" placeholder="Username yarating" name="username" class="form-control">
                    <p class="text-danger" id="usern"></p>

					<label for="paro" class="mt-2"> Parol :</label>
					<input type="password" id="password" placeholder="Parol yarating" name="parol" class="form-control">

					<label for="par" class="mt-3"> Parolni tasdiqlang :</label>
					<input type="password" id="password2" placeholder="Parolni tasdiqlang" name="password" class="form-control">

					<button type="submit" name="btn" class="btn btn-danger btn-block mt-4">Jo'natish</button>
				</form>
			</div>
		</div>

