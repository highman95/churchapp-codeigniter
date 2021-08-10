<h3>Meetings</h3>
<hr />

<div class="row">
	<div class="col-12 text-right mb-3">
		<a href="/meetings/add" class="btn btn-danger font-weight-bold">Add Meeting</a>
	</div>

	{{#if error}}
		<div class="col-12 bg-warning mb-3 font-weight-bold">
			{{error}}
		</div>
	{{/if}}

	{{#if meetings}}
		{{#each meetings as |meeting index|}}
			<div class="col-3 mb-4">
				<div class="card">
					<div class="card-body">
						<!-- <button type="button" class="close" aria-label="Delete">
              <span aria-hidden="true">&times;</span>
            </button> -->
						<h5 class="card-title">{{meeting.meeting_type}}</h5>
						<h6 class="card-subtitle mb-2 text-muted small font-weight-bold">{{meeting.held_on}}</h6>
						<p class="card-text">{{meeting.tag}}</p>
						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
						<a href="meetings/edit/{{meeting.id}}" class="card-link text-danger font-weight-bold">Edit</a>
						<a href="meetings/{{meeting.id}}" class="card-link text-info font-weight-bold">View</a>
					</div>
				</div>
			</div>
		{{/each}}
	{{/if}}
</div>