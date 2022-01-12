import React from 'react';

function BiCycle(props) {
	const title = props.title || "bi cycle";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M12.3 36.9c-6.1 0-11 5-11 11s5 11 11 11 11-5 11-11-4.9-11-11-11zm0 18.5c-4.2 0-7.5-3.4-7.5-7.5s3.4-7.5 7.5-7.5 7.5 3.4 7.5 7.5-3.4 7.5-7.5 7.5z"/>
		<path d="M51.8 36.9c-6.1 0-11 4.9-11 11s4.9 11 11 11 11-4.9 11-11-5-11-11-11zm0 18.5c-4.1 0-7.5-3.4-7.5-7.5s3.4-7.5 7.5-7.5 7.5 3.4 7.5 7.5-3.4 7.5-7.5 7.5z"/>
		<path d="M47.2 30.1c.6.8 1.7.9 2.5.3.8-.6.9-1.7.3-2.5l-8.8-11.2-.2-.1c-.8-.8-2-1-3.1-.5l-12 7c-.7.4-1.2 1.1-1.3 1.9-.1.7.2 1.5.7 2l4 4.6c.7.8 1 1.7 1 2.7v6.9c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-6.9c0-1.8-.7-3.6-1.9-5l-3.2-3.8L39 19.6l8.2 10.5z"/>
		<path d="M49.2 16.6c3.2 0 5.8-2.6 5.8-5.8S52.4 5 49.2 5c-3.2 0-5.8 2.6-5.8 5.8s2.6 5.8 5.8 5.8zm0-8c1.2 0 2.3 1 2.3 2.3 0 1.2-1 2.3-2.3 2.3-1.2 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3z"/>
	</g>
</svg>
	);
};

export default BiCycle;