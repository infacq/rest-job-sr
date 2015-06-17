<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Service Rocket Job Application</title>
		<meta name="csrf-token" content="{!! csrf_token() !!}">
		<link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body ng-app="jobApp">
		<div layout="row" layout-align="center center">
			{{-- The main action happens here --}}
			<md-card flex="33" ng-controller="MainCtrl">
				<img ng-src="https://lh3.googleusercontent.com/-i2TYuCl4Iy4/VNV7muUt3sI/AAAAAAAAAAU/xqhMjZS4fgk/w1001-h563-no/" class="md-card-image" alt="Washed Out">
				<md-card-content>					
					<!-- The row for the city select autocomplete list -->
					<md-content layout-padding="">
						{!! Form::open(['name' => 'checkoutForm', 'url' => 'http://sr-recruit.herokuapp.com/resumes', 'enctype' => 'multipart/form-data']) !!}
							<md-input-container flex="" class="md-icon-float">
								<label>Name</label>
								<md-icon md-svg-icon="/img/action/svg/production/ic_face_48px.svg"></md-icon>									
								{!! Form::text('name', null, ['ng-model' => 'appname']); !!}
							</md-input-container>
							<md-input-container flex="" class="md-icon-float">
								<label>Email</label>
								<md-icon md-svg-icon="/img/communication/svg/production/ic_quick_contacts_mail_48px.svg"></md-icon>
								{!! Form::email('email', null, ['ng-model' => 'appemail']); !!}
							</md-input-container>
							<md-input-container flex="">
								<label>Biography</label>
								{!! Form::textarea('about', null, ['ng-model' => 'appabout', 'md-maxlength' => '150']); !!}
							</md-input-container>							
							<label for="file" class="md-button md-fab">
								<md-icon md-svg-src="/img/action/svg/production/ic_assignment_48px.svg" />
							</label>							
							{!! Form::file('file', ['ng-model' => 'docs']); !!}
							<md-button class="md-fab main" aria-label="Submit application">
								<md-icon md-svg-src="/img/content/svg/production/ic_send_48px.svg"></md-icon>
							</md-button>								
						{!! Form::close() !!}
					</md-content>
					{{-- The submit button --}}
				</md-card-content>
			</md-card>
		</div>
	<script src="{{ asset('/js/bundle.js') }}"></script>
	</body>
</html>
