import BookList from '../Components/BookList';
import { Link, Head } from '@inertiajs/react';
export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Welcome" />
            <h2 className="py-5 text-center text-3xl text-monospace">My App</h2>
            <p className="text-center text-blue-500"><a href="/docs">API Documentation</a></p>
            <div className="p-3">
                <BookList />
            </div>
        </>
    );
}
