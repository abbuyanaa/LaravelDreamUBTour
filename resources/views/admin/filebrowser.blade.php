<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<script src="{{ asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
				var funcNum = <?php echo $_GET['CKEditorFuncNum'] . ';'; ?>
				$('#fileExplorer').on('click', 'img', function() {
						var fileUrl = $(this).attr('src');
						window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
						window.close();
				}).hover(function() {
						$(this).css('cursor','pointer');
				});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Upload or Select Image</h1> <br />
          <form action="{{ route('admin.filebrowser.store') }}" method="post" enctype="multipart/form-data">
            @csrf
						<div class="form-group">
							<label for="file">Select File</label>
							<input type="file" name="image">
							<p class="help-block">Select you file which you want to upload.</p>
						</div>
						<div class="footer">
							<button type="submit" name="submit" class="btn btn-primary">Upload</button>
						</div>
				</form>
			</div>
		</div>
		<br />
		<div class="row" id="fileExplorer">
			@foreach ($images as $row)
					<div class="col-xs-3 col-md-3">
							<a href="javascript:selectImage('{{ $row->image }}')" class="img-thumbnail">
									<img src="{{ asset('storage/'.$row->image)}}" alt="{{ $row->image }}" title="{{ $row->image }}" width="100%">
							</a>
					</div>
			@endforeach
		</div>
	</div>
	
</body>
</html>