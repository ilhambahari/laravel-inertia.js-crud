<template>
	<Layout title="Tambah User">
		<h1>Tambah User</h1>
		<form @submit.prevent="create">
			<div class="form-group">
				<label>Nama User</label>
				<input type="text" v-model="user.name">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" v-model="user.email">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" v-model="user.password">
			</div>
			<button type="submit">Tambah</button>
		</form>
	</Layout>
</template>

<script>
	import Layout from '../../Shared/Layout.vue'
	export default{
		components: {
			Layout
		},
		data(){
			return{
				user: {
					name: '',
					email: '',
					password: ''
				}
			}
		},
		props: {
			title: String,
		},
		methods: {
			create(){
				this.$inertia.post('/users', this.user)
			}
		}
	}
</script>