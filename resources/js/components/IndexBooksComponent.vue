<template>
    <div>
        <h1>Books</h1>
        <div class="row">
            <div class="col-md-6">
                <router-link :to="{ name: 'books.create' }" class="btn btn-primary">Create Book record</router-link>
            </div>
        </div>
        <br/>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book title</th>
                <th>Release date</th>
                <th>Authors</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.attributes.title }}</td>
                <td>{{ book.attributes.releaseDate }}</td>
                <td>{{ book.attributes.authors }}</td>
                <td>
                    <router-link :to="{name: 'books.edit', params: { id: book.id }}" class="btn btn-primary">Edit
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" @click.prevent="deleteBook(book.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        created() {
            let uri = 'http://books.lc/api/admin/books';
            this.axios.get(uri).then(response => {
                //console.log(this);
                this.books = response.data;
                console.log(response.data);
            });
        },
        methods: {
            deleteBook(id) {
                let uri = `http://books.lc/api/admin/books/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.books.splice(this.books.indexOf(id), 1);
                });
            }
        }
    }
</script>