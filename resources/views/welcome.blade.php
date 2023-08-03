<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
</head>

<body>
    <livewire:form />

    <script type="text/javascript">
        document.addEventListener('alpine:init', () => {
            Alpine.data('formPassword', () => ({
                showPassword() {
                    this.$refs.password_field.setAttribute('type', 'text');
                    this.$el.innerHTML = 'Hide Password';
                },
                hidePassword() {
                    this.$refs.password_field.setAttribute('type', 'password');
                    this.$el.innerHTML = 'Show Password';
                },
                toggleInputType() {
                    <!-- prettier-ignore-start -->

                    this.$refs.password_field.getAttribute('type') === 'password'
                        ? this.showPassword()
                        : this.hidePassword();

                    this.$refs.password_field.select();

                    <!-- prettier-ignore-end -->
                }
            }));
        })
    </script>
</body>

</html>
