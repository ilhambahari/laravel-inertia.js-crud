<template>
	<div>
		<h1>Hello {{ title }}</h1>
		<inertia-link href="/about">About</inertia-link>
	</div>
</template>

<style scoped></style>

<script>
	export default{
		props: ['title']
	}
</script>