<template>
    <div>
        <h1>Create A Post</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Book title:</label>
                        <input type="text" class="form-control" v-model="book.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Book description:</label>
                        <textarea class="form-control" v-model="book.description" rows="5"></textarea>
                    </div>
                </div>
            </div><br />
            <div class="col-md-6">
                <div class="form-group">
                    <label>Release date:</label>
                    <input type="text" class="form-control" v-model="book.releaseDate">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" @click.prevent="addBook()">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                book:{}
            }
        },
        methods: {
            addBook(){
                let uri = 'http://books.lc/api/admin/books/create';
                this.axios.post(uri, this.book).then((response) => {
                    this.$router.push({name: 'books.create'});
                });
            }
        }
    }
</script>