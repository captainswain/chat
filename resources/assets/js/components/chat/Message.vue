<template>
	<div class="chat__message" :class="{ 'chat__message--own' : message.selfOwned }">
		<strong class="chat__message-user">{{message.user.name}}</strong>
		<span class="chat__message-timestamp">{{message.created_at}}</span>
		<p class="chat__message-body">{{message.body}}</p>
	</div>
</template>
<style lang="scss">
	.chat{
		&__message{
			&--own{
				background: #f0f0f0;
			}
			padding: 15px;
			border-bottom:  1px solid #eee;
			&-user{
				font-weight: 800;
			}
			&-timestamp{
				color: #aaa;
			}
			
			&-body{
				margin-bottom: 0;
				white-space: pre-wrap;
			}
		}
	}
</style>

<script>
 export default{
 	props: ['message']
 }
</script>