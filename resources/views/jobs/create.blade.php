<x-layout>
    <x-section-heading>New Job</x-section-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select>
            <option>Full-time</option>
            <option>Part-time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.form label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />

        <-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
