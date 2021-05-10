<style>
    #container {
        margin-top: 100px;
    }

</style>

<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>All Messages</h3>
                        <button type="submit" class="btn btn-primary">Add Message</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->text }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
