import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

const statistics = [
    {
        title: 'Total Processes',
        value: '0',
        description: 'Processes created',
    },
    {
        title: 'Active Automations',
        value: '0',
        description: 'Currently running',
    },
    {
        title: 'Pending Reviews',
        value: '0',
        description: 'Awaiting approval',
    },
];

export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />

            <div className="flex flex-1 flex-col gap-6 p-6">
                <div className="flex flex-col justify-between gap-4 md:flex-row md:items-center">
                    <div>
                        <h1 className="text-3xl font-bold">
                            Automation Dashboard
                        </h1>

                        <p className="mt-1 text-muted-foreground">
                            Transform manual business processes into intelligent
                            automated workflows.
                        </p>
                    </div>

                    <Link
                        href="/processes/create"
                        className="inline-flex items-center justify-center rounded-md bg-primary px-5 py-3 text-sm font-medium text-primary-foreground"
                    >
                        + Create New Process
                    </Link>
                </div>

                <div className="grid gap-4 md:grid-cols-3">
                    {statistics.map((item) => (
                        <div
                            key={item.title}
                            className="rounded-xl border bg-card p-6 shadow-sm"
                        >
                            <p className="text-sm text-muted-foreground">
                                {item.title}
                            </p>

                            <p className="mt-2 text-3xl font-bold">
                                {item.value}
                            </p>

                            <p className="mt-1 text-sm text-muted-foreground">
                                {item.description}
                            </p>
                        </div>
                    ))}
                </div>

                <div className="rounded-xl border bg-card p-6 shadow-sm">
                    <h2 className="text-xl font-semibold">
                        Describe. Generate. Automate.
                    </h2>

                    <p className="mt-2 max-w-2xl text-muted-foreground">
                        Describe a manual process in plain English. The platform
                        will analyse its steps and prepare an intelligent
                        automation workflow.
                    </p>

                    <div className="mt-6 rounded-lg border border-dashed p-8 text-center">
                        <p className="font-medium">
                            You have not created any processes yet.
                        </p>

                        <p className="mt-1 text-sm text-muted-foreground">
                            Create your first process to begin building an
                            automated workflow.
                        </p>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}