<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Service Rocket Job Application</title>
		<meta name="csrf-token" content="{!! csrf_token() !!}">
		<link href="{{ asset('/css/vendor.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body ng-app="jobApp" ng-cloak>
		<md-content>
			<md-toolbar>
				<div class="md-toolbar-tools">
				<md-button class="md-icon-button" aria-label="Settings">
					<md-icon md-svg-icon="/img/action/svg/production/ic_face_48px.svg"></md-icon>
				</md-button>
				<h2><span class="md-title">Service Rocket</span></h2>
				</div>
			</md-toolbar>
			{{-- The content area --}}
			<div layout="row">
			{{-- 20% padding to the left --}}
				<div flex="20"></div>
				{{-- The main action happens here --}}
				<md-card flex ng-controller="MainCtrl as ctrl">
					<md-card-content>
						<!-- The row for the city select autocomplete list -->
						<md-content layout-padding="">
							{!! Form::open(['name' => 'checkoutForm']) !!}
								<md-input-container flex="" class="md-icon-float">
									<label>Name</label>
									<md-icon md-svg-icon="/img/action/svg/production/ic_face_48px.svg"></md-icon>									
									{!! Form::text('appname', null, ['ng-model' => 'appname']); !!}
								</md-input-container>
								<md-input-container flex="" class="md-icon-float">
									<label>Email</label>
									<md-icon md-svg-icon="/img/communication/svg/production/ic_quick_contacts_mail_48px.svg"></md-icon>
									{!! Form::email('appemail', null, ['ng-model' => 'appemail']); !!}
								</md-input-container>
								<md-input-container flex="">
									<label>Biography</label>
									{!! Form::textarea('appabout', null, ['ng-model' => 'appabout', 'md-maxlength' => '150']); !!}
								</md-input-container>							
								<div ngf-drop ngf-select ng-model="files" class="drop-box" ngf-drag-over-class="dragover" ngf-multiple="true" ngf-allow-dir="true" accept="image/*,application/pdf">Drop pdfs or images here</div>
								<div ngf-no-file-drop>File Drag/Drop is not supported for this browser</div>
							{!! Form::close() !!}
						</md-content>
						{{-- The submit button --}}
					</md-card-content>
				</md-card>
				<div flex="20"></div>
			</div>
		</md-content>
		<pre>@{{log}}</pre>
	<script src="{{ asset('/js/bundle.js') }}"></script>
	</body>
</html>
