 {{-- this code is the switch on off button ..... --}}

 {{-- controller --}}
     public function ToggleCategoryStatus(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status; // toggle between 1 and 0
        $category->save();

        return back()->with('success', 'Category status updated.');
    }
 {{-- route --}}
Route::post('/category/status-toggle/{id}', [CategoryController::class, 'ToggleCategoryStatus'])->name('category.status.toggle');

 {{-- bootstrap --}}
 <form action="{{ route('category.status.toggle', $category->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="custom-switch mt-2">
            <input type="checkbox"
                name="status"
                onchange="this.form.submit()"
                class="custom-switch-input"
                {{ $category->status ? 'checked' : '' }}>
            <span class="custom-switch-indicator"></span>
        </label>
    </div>
</form>
