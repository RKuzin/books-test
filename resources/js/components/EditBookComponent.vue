// EditComponent.vue

<template>
    <div>
        <h1>Edit Book</h1>
        <form @submit.prevent="updatePost">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Book title:</label>
                        <input type="text" class="form-control" v-model="book.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Book description:</label>
                        <textarea class="form-control" v-model="book.description" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Release date:</label>
                        <input type="text" class="form-control" v-model="book.release_date">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary" @click.prevent="updateBook()">Update</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                book: {}
            }
        },
        created() {
            let uri = `http://books.lc/api/admin/books/edit/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.book = response.data;
                console.log(response.data);
            });
        },
        methods: {
            updateBook() {
                let uri = `http://books.lc/api/admin/books/update/${this.$route.params.id}`;
                this.axios.post(uri, this.book).then((response) => {
                    this.$router.push({name: 'books.edit'});
                });
            }
        }
    }
</script>