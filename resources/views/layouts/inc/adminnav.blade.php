<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">






<div>

	<div class="notification_wrap">
		<div class="notification_icon">
			<i class="fas fa-bell"></i>
		</div>
		<div class="dropdown">
           @foreach (auth()->user()->unreadNotifications as $notification)

			<div class="notify_item">
				<div class="notify_info ">
					<p>{{$notification->data['title'] }}<span>  {{ $notification->data['user_fname'] }}
                                                       {{ $notification->data['user_lname'] }}</span></p>
					<span class="notify_time"> {{ $notification->created_at }}</span>
                    	<span>  <a href="{{url('all-orders/'.$notification->data['id'] )}}" style="text-decoration:none;">view it </a></span>
				</div>
			</div>

                   @endforeach

        </div>
          </div>
        </div>











    </div>
          </div>
      </nav>
