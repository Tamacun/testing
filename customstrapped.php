<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="customstrapped.js"></script>


<link rel="stylesheet" type="text/css" href="customfixed.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class='container'>
	<div class='row-centered'>
		<div class='col-lg-12 header'>
				<div class='col-sm-6 col-md-6 col-lg-6 button-box'>
					<a href="javascript:randomlink()" class="random-button">Find a Random Stream</a>
				</div>
					<div class='col-sm-6 col-md-6 col-lg-6 custom-page-box'>
						<a href='index.php' class='random-button'>Top 12</a>
					</div>
				</div>
		</div>
	</div>
</div>
	<div id='chat-pop' class='chat-pop'>
		<iframe frameborder="0" 
	        scrolling="no" 
	        id="chat_embed"
	        src="" 
	        height="300" 
	        width="350">
		</iframe>
	</div>

<div class='container'>
	<div class='row'>
		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r1'>
			<div class='add-stream1'>
			</div>
			<div class='video v1'>
				<iframe 
					id= 'onesource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form1' onsubmit='return false'>
					<input id='userInput1' type='text' placeholder='Twitch ID'>
					<input id='streamsubmit' type='submit' value='Add Stream' onclick='loadPages1()'>
					<input id='chatsubmit' type='submit' value='Pop Chat' onclick='myFunction()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r2'>
			<div class='add-stream2'>
			</div>
			<div class='video v2'>
				<iframe 
					id= 'twosource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form2' onsubmit='return false'>
					<input id='userInput2' type='text'>
					<input type='submit' onclick='loadPages2()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r3'>
			<div class='add-stream3'>
			</div>
			<div class='video v3'>
				<iframe 
					id= 'threesource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form3' onsubmit='return false'>
					<input id='userInput3' type='text'>
					<input type='submit' onclick='loadPages3()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r4'>
			<div class='add-stream4'>
			</div>
			<div class='video v4'>
				<iframe 
                    id= 'foursource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form4' onsubmit='return false'>
					<input id='userInput4' type='text'>
					<input type='submit' onclick='loadPages4()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r5'>
			<div class='add-stream5'>
			</div>
			<div class='video v5'>
				<iframe 
					id= 'fivesource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form5' onsubmit='return false'>
					<input id='userInput5' type='text'>
					<input type='submit' onclick='loadPages5()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r6'>
			<div class='add-stream6'>
			</div>
			<div class='video v6'>
				<iframe 
					id= 'sixsource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form6' onsubmit='return false'>
					<input id='userInput6' type='text'>
					<input type='submit' onclick='loadPages6()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r7'>
			<div class='add-stream7'>
			</div>
			<div class='video v7'>
				<iframe 
                    id= 'sevensource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form7' onsubmit='return false'>
					<input id='userInput7' type='text'>
					<input type='submit' onclick='loadPages7()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r8'>
			<div class='add-stream8'>
			</div>
			<div class='video v8'>
				<iframe 
					id= 'eightsource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form8' onsubmit='return false'>
					<input id='userInput8' type='text'>
					<input type='submit' onclick='loadPages8()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r9'>
			<div class='add-stream9'>
			</div>
			<div class='video v9'>
				<iframe 
					id= 'ninesource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form9' onsubmit='return false'>
					<input id='userInput9' type='text'>
					<input type='submit' onclick='loadPages9()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r10'>
			<div class='add-stream10'>
			</div>
			<div class='video v10'>
				<iframe 
					id= 'tensource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form10' onsubmit='return false'>
					<input id='userInput10' type='text'>
					<input type='submit' onclick='loadPages10()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r11'>
			<div class='add-stream11'>
			</div>
			<div class='video v11'>
				<iframe 
					id= 'elevensource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form11' onsubmit='return false'>
					<input id='userInput11' type='text'>
					<input type='submit' onclick='loadPages11()'>
			</form>
		</div>

		<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 rectangle r12'>
			<div class='add-stream12'>
			</div>
			<div class='video v12'>
				<iframe 
					id= 'twelvesource'
                    class='block-player'
                    src=""
                    height="120"
                    width="<width>"
                    frameborder="<frameborder>"
                    scrolling="<scrolling>"
                    allowfullscreen="<allowfullscreen>">
                </iframe>
			</div>
			<form id='form12' onsubmit='return false'>
					<input id='userInput12' type='text'>
					<input type='submit' onclick='loadPages12()'>
			</form>
		</div>

	</div>
</div>

</body>
</html>