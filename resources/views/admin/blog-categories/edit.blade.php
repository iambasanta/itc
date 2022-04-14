<x-admin.app title="Blog | Categories | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Category</h1>

        <form method="POST" action="{{ route('admin.blog-categories.update',$blogCategory) }}">
            @csrf

            @method('PATCH')

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">
                        <x-form.group label="Category Title" for="title">
                            <x-form.input type="text" id="title" name="title" value="{{ old('title') ?? $blogCategory->title }}" />
                            <x-form.error name="title" />
                        </x-form.group>

                        <x-form.group label="Slug" for="slug">
                            <x-form.input type="text" id="slug" name="slug" value="{{ old('slug') ?? $blogCategory->slug }}" />
                            <x-form.error name="slug" />
                        </x-form.group>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.blog-categories.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Update</x-button.primary>
                </div>
            </div>
        </form>
    </div>

    <x-notification />

</x-admin.app>
