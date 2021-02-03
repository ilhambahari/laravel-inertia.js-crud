<template>
	<Layout title="Detail User">
		<h1>Profile</h1>
		<ul>
			<h3>{{user.name }}</h3>
			<p>{{ user.email }}</p>
			<p>{{ user.created_at }}</p>
		</ul>
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
			user: Object
		}
	}
</script>