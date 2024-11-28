<x-layout>
    <x-page-heading>Login Page</x-page-heading>
    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.error props="email"/>
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.error props="password"/>
        <x-forms.button>Login In </x-forms.button>
    </x-forms.form>
</x-layout>
