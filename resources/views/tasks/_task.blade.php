<div class="card" style="width: 18rem;">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $task->title }}</h5>
        <p class="card-text">{{ $task->body }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer">
        <small class="text-muted">Ultima atualizaçao: {{ $task->updated_at }}</small>
    </div>
</div>