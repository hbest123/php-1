<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>post</h1>
	<hr>
	<form action="/test" method="post">
	 {{ csrf_field() }}
	<input type="text" name="name">
	<button>提交</button>
	</form>

<hr>
<h1>put</h1>
	
	<form action="/put" method="post">
	{{ method_field('PUT')}}
	 {{ csrf_field() }}
	<input type="text" name="name">
	<button>提交</button>
	</form>

	<hr>
<h1>delete</h1>
	
	<form action="/mydelete" method="post">
	{{ method_field('delete')}}
	 {{ csrf_field() }}
	<input type="text" name="name">
	<button>提交</button>
	</form>

	<hr>
<h1>match</h1>
	
	<form action="/php" method="match">
	{{ method_field('match')}}
	 {{ csrf_field() }}
	<input type="text" name="name">
	<button>提交</button>
	</form>	

	<hr>
<h1>资源控制器</h1>
	
	<form action="/stu/1" method="post">
	{{ method_field('delete')}}
	 {{ csrf_field() }}
	<input type="text" name="name">
	<button>提交</button>
	</form>	
</body>
</html>