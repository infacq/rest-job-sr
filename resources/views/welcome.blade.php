<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Service Rocket Job Application</title>
		<meta name="csrf-token" content="{!! csrf_token() !!}">
		<link href="{{ asset('/css/vendor.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body ng-app="serviceRocketApp" ng-cloak>
		<md-content>
			<md-toolbar>
				<div class="md-toolbar-tools">
				<md-button class="md-icon-button" aria-label="Settings">
					<md-icon md-svg-icon="/img/logo.jpg"></md-icon>
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
									{!! Form::text('appname', null, ['ng-model' => 'applicant.name']); !!}
								</md-input-container>
								<md-input-container flex="" class="md-icon-float">
									<label>Email</label>
									<md-icon md-svg-icon="/img/communication/svg/production/ic_quick_contacts_mail_48px.svg"></md-icon>
									{!! Form::email('appemail', null, ['ng-model' => 'applicant.email']); !!}
								</md-input-container>
								<md-input-container flex="">
									<label>Biography</label>
									{!! Form::textarea('appbio', null, ['ng-model' => 'applicant.about', 'md-maxlength' => '150', 'columns' => '1']); !!}
								</md-input-container>							
								<md-button>
									{!! Form::label('appdocs', 'Resume'); !!}									
								</md-button>
								{!! Form::file('appdocs'); !!}
							{!! Form::close() !!}
						</md-content>
						{{-- The submit button --}}
						<div layout>
							<md-button class="md-raised md-primary" ng-click="submit()">Search for destinations!</md-button>
						</div>
					<md-card-content>
				</md-card>
				<div flex="20"></div>
			</div>
		</md-content>
	<script src="{{ asset('/js/vendor.js') }}"></script>
	<script src="{{ asset('/js/all.js') }}"></script>
	</body>
</html>
