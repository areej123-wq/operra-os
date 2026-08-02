import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
    {
        title: 'Create Process',
        href: '/processes/create',
    },
];

export default function CreateProcess() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Create Process" />

            <div className="flex flex-1 flex-col gap-6 p-6">
                <div>
                    <h1 className="text-3xl font-bold">
                        Create a New Process
                    </h1>

                    <p className="mt-1 text-muted-foreground">
                        Explain the manual work that you want to automate.
                    </p>
                </div>

                <div className="max-w-3xl rounded-xl border bg-card p-6 shadow-sm">
                    <label
                        htmlFor="process-description"
                        className="text-sm font-medium"
                    >
                        Describe your manual process
                    </label>

                    <textarea
                        id="process-description"
                        rows={8}
                        className="mt-2 w-full rounded-md border bg-background p-3"
                        placeholder="Example: When a student requests laboratory equipment, staff should review the request, update inventory and send a return reminder."
                    />

                    <div className="mt-5 flex gap-3">
                        <button
                            type="button"
                            className="rounded-md bg-primary px-5 py-3 text-sm font-medium text-primary-foreground"
                        >
                            Generate Workflow
                        </button>

                        <Link
                            href="/dashboard"
                            className="rounded-md border px-5 py-3 text-sm font-medium"
                        >
                            Cancel
                        </Link>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}