import BookList from '../Components/BookList';
import { Link, Head } from '@inertiajs/react';
export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Welcome" />
            <h2>My App</h2>
            <BookList />
        </>
    );
}
