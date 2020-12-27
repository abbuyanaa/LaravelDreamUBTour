<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ asset('global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('pages/css/error.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{ asset('layouts/layout4/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/layout4/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{ asset('layouts/layout4/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('pages/css/profile-2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('pages/css/portfolio.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('global/plugins/cubeportfolio/css/cubeportfolio.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<link rel="shortcut icon" href="favicon.ico" />

<script src="{{ asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>

<script>
  $(document).ready(function() {
      CKEDITOR.replace('ckeditor', {
          height: 400,
          filebrowserBrowseUrl: "{{ route('admin.filebrowser.index') }}"
      });
  });
</script>