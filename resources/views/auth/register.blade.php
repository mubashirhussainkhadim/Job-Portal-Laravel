<x-layout>
    <x-page-heading>Registeration Page</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.error props="name"/>
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.error props="email"/>
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.error props="password"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />
        <x-forms.error props="password_confirmation"/>
        <x-forms.divider />
        <x-forms.input label="Employer" name="employer" />
        <x-forms.error props="employer"/>
        <x-forms.input label="Employer Logo" name="logo" type="file" />
        <x-forms.error props="logo"/>
        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
