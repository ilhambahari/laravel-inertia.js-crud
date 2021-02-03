<template>
	<Layout title="Daftar User">
		<h1>Daftar {{ title }}</h1>
		<inertia-link href="/users/create">Tambah User</inertia-link> <br><br>
		<table border="1">
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Created at</th>
				<th>Aksi</th>
			</tr>
			<tr v-for="user in users">
				<td>{{ user.name }}</td>
				<td>{{ user.email }}</td>
				<td>{{ user.created_at }}</td>
				<td>
					<inertia-link :href="`/users/${user.id}`">Lihat data</inertia-link>
				</td>
			</tr>
		</table>
	</Layout>
</template>

<script>
	import Layout from '../../Shared/Layout.vue'
	export default{
		components: {
			Layout
		},
		props: {
			title: String,
			users: Array
		}
	}
</script>