

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            @foreach ($allContacts as $contact)
                <div class="card">
                    <div class="card-header">
                        <h4>{{$contact->email}}</h4>
                        <p>{{$contact->subject}}</p>
                        <p>{{$contact->message}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>