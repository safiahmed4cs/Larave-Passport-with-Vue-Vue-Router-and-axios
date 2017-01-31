<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">The User Page</div>

                    <div class="panel-body">
                        Its me <strong><span v-text="name"></span></strong> an user component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                name: ''
            }
        },
        created() {
            axios.get('/api/user')
            .then(response => {
                this.name = response.data.name;
            });
        }
    }
</script>