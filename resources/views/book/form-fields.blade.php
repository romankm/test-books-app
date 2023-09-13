<input type="hidden" value="{{$book->id}}" name="id">

<div class="mb-3">
    <label for="title" class="form-label">Title:</label>
    <input
        name="title"
        id="title"
        value="{{ old('title') ?? $book->title }}"
        type="text"
        class="form-control"
        required
    >

    @include('book.field-error-alert', ['fieldName' => 'title'])
</div>
<div class="mb-3">
    <label for="author" class="form-label">Author:</label>
    <input
        name="author"
        id="author"
        value="{{ old('author') ?? $book->author }}"
        type="text"
        class="form-control"
        required
    >
    @include('book.field-error-alert', ['fieldName' => 'author'])
</div>
<div class="mb-3">
    <label for="publication_year" class="form-label">Publication year:</label>
    <input
        name="publication_year"
        id="publication_year"
        type="number"
        min="1900"
        max="2099"
        step="1"
        class="form-control"
        style="width: 5rem"
        value="{{ old('publication_year') ?? $book->publication_year }}"
    />
    @include('book.field-error-alert', ['fieldName' => 'publication_year'])
</div>
<div class="mb-3">
    <label for="isbn" class="form-label">ISBN:</label>
    <input
        name="isbn"
        id="isbn"
        value="{{ old('isbn') ?? $book->isbn }}"
        type="text"
        class="form-control"
        required
    >
    @include('book.field-error-alert', ['fieldName' => 'isbn'])
</div>
